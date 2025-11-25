# ==============================================================================
# Shell Configuration
# ==============================================================================
SHELL = /bin/bash

# ==============================================================================
# Color Definitions
# ==============================================================================
RESET   := \033[0m
BOLD    := \033[1m
BLACK   := \033[0;30m
RED     := \033[0;31m
GREEN   := \033[0;32m
YELLOW  := \033[0;33m
BLUE    := \033[0;34m
MAGENTA := \033[0;35m
CYAN    := \033[0;36m
WHITE   := \033[0;37m

# ==============================================================================
# Color Combinations
# ==============================================================================
TARGET_COLOR      := $(BOLD)$(YELLOW)
INFRA_TARGET_COLOR:= $(BOLD)$(GREEN)
QA_TARGET_COLOR   := $(BOLD)$(RED)
DESCRIPTION_COLOR := $(CYAN)
HEADER_COLOR      := $(BOLD)$(BLUE)
USAGE_CMD_COLOR   := $(GREEN)
USAGE_ARG_COLOR   := $(YELLOW)
SECTION_COLOR     := $(BOLD)$(MAGENTA)

# ==============================================================================
# Service Name
# ==============================================================================
SERVICE ?= php

# ==============================================================================
# Phony Targets Declaration
# ==============================================================================
.PHONY: help default docker infra-up infra-stop infra-logs infra-clean infra-shell infra-bash infra-migration infra-keygen infra-composer-install run-dev run-production

# ==============================================================================
# Default Target
# ==============================================================================
default: help ##@ Show this help message (default target)

# ==============================================================================
# QA Targets
# ==============================================================================
apply-qa: ##@ Run QA tools (phpinsights, phpstan, ...)
	@printf "$(HEADER_COLOR)Running QA tools...$(RESET)\n"
	@./vendor/bin/phpinsights
	@./vendor/bin/phpstan analyse --configuration=phpstan.dist.neon

# ==============================================================================
# Docker Help
# ==============================================================================
docker: ##@ Show Docker specific help and commands
	@printf "$(HEADER_COLOR)Docker Commands$(RESET):\n"
	@printf "\n"
	@printf "$(TARGET_COLOR)Usage: make <infra-target>$(RESET)\n"
	@printf "\n"
	@printf "$(SECTION_COLOR)Available Docker targets:$(RESET)\n"
	@grep -E '^infra-[a-zA-Z0-9_-]+[[:space:]]*:[[:space:]]*##@' $(MAKEFILE_LIST) | \
    awk -v target_color="$(INFRA_TARGET_COLOR)" \
        -v description_color="$(DESCRIPTION_COLOR)" \
        -v reset_color="$(RESET)" \
        'BEGIN {FS = ":.*?##@"}; \
        {printf "  %s%-25s%s - %s%s%s\n", target_color, $$1, reset_color, description_color, $$2, reset_color}' | \
    sort

# ==============================================================================
# Help Target (Main)
# ==============================================================================
help: ##@ Show this help message
	@printf "$(HEADER_COLOR)Usage: make <target>$(RESET)\n"
	@printf "\n"

	@printf "$(SECTION_COLOR)General Targets:$(RESET)\n"
	@grep -E '^[a-zA-Z0-9_-]+[[:space:]]*:[[:space:]]*##@' $(MAKEFILE_LIST) | \
    grep -vE '^(infra-|apply-qa)' | \
    awk -v target_color="$(TARGET_COLOR)" \
        -v description_color="$(DESCRIPTION_COLOR)" \
        -v reset_color="$(RESET)" \
        'BEGIN {FS = ":.*?##@"}; \
        {printf "  %s%-25s%s - %s%s%s\n", target_color, $$1, reset_color, description_color, $$2, reset_color}' | \
    sort

	@printf "\n"

	@printf "$(SECTION_COLOR)QA Targets:$(RESET)\n"
	@grep -E '^apply-qa[[:space:]]*:[[:space:]]*##@' $(MAKEFILE_LIST) | \
    awk -v target_color="$(QA_TARGET_COLOR)" \
        -v description_color="$(DESCRIPTION_COLOR)" \
        -v reset_color="$(RESET)" \
        'BEGIN {FS = ":.*?##@"}; \
        {printf "  %s%-25s%s - %s%s%s\n", target_color, $$1, reset_color, description_color, $$2, reset_color}' | \
    sort

	@printf "\n"

	@printf "$(SECTION_COLOR)Infrastructure Targets:$(RESET)\n"
	@grep -E '^infra-[a-zA-Z0-9_-]+[[:space:]]*:[[:space:]]*##@' $(MAKEFILE_LIST) | \
    awk -v target_color="$(INFRA_TARGET_COLOR)" \
        -v description_color="$(DESCRIPTION_COLOR)" \
        -v reset_color="$(RESET)" \
        'BEGIN {FS = ":.*?##@"}; \
        {printf "  %s%-25s%s - %s%s%s\n", target_color, $$1, reset_color, description_color, $$2, reset_color}' | \
    sort

# ==============================================================================
# Docker Targets
# ==============================================================================
infra-up: ##@ Start the Docker infrastructure
	@printf "$(HEADER_COLOR)Starting Docker infrastructure...$(RESET)\n"
	@docker compose up -d --build

infra-stop: ##@ Stop the Docker infrastructure
	@printf "$(HEADER_COLOR)Stopping Docker infrastructure...$(RESET)\n"
	@docker compose down

infra-logs: ##@ Show logs from the Docker infrastructure
	@printf "$(HEADER_COLOR)Showing Docker logs...$(RESET)\n"
	@docker compose logs -f

infra-clean: ##@ Clean up Docker containers and images
	@printf "$(HEADER_COLOR)Cleaning up Docker containers and images...$(RESET)\n"
	@docker compose down --rmi all

infra-shell: ##@ Open a shell in the Docker container
	@printf "$(HEADER_COLOR)Opening shell in Docker container...$(RESET)\n"
	@docker compose exec $(SERVICE) sh

infra-bash: ##@ Open a bash shell in the Docker container
	@printf "$(HEADER_COLOR)Opening bash shell in Docker container...$(RESET)\n"
	@docker compose exec $(SERVICE) bash

infra-migration: ##@ Run database migrations in the Docker container
	@printf "$(HEADER_COLOR)Running database migrations in Docker container...$(RESET)\n"
	@docker compose exec $(SERVICE) php artisan migrate

infra-keygen: ##@ Generate application key in the Docker container
	@printf "$(HEADER_COLOR)Generating application key in Docker container...$(RESET)\n"
	@docker compose exec $(SERVICE) php artisan key:generate

infra-composer-install: ##@ Install Composer dependencies in the Docker container
	@printf "$(HEADER_COLOR)Installing Composer dependencies in Docker container...$(RESET)\n"
	@docker compose exec $(SERVICE) composer install


# ==============================================================================
# Run Environment
# ==============================================================================

run-dev: ##@ Run the development environment
	@printf "$(HEADER_COLOR)Running development environment...$(RESET)\n"
	@npm run dev

run-production: ##@ Run the production environment
	@printf "$(HEADER_COLOR)Running production environment...$(RESET)\n"
	@npm run build
