# Xtream UI Tools

## Overview
This is a collection of modifications, tools, and utilities for Xtream UI (an IPTV panel system). The repository contains modified PHP files, cron scripts, nginx configurations, and various helper tools.

**Note:** This is not a standalone application - it's a library of patches and tools meant to be used with an existing Xtream UI installation.

## Project Structure

- **admin-modified/** - Modified admin panel PHP files with enhancements
- **crons/** - Automated cron job scripts (backups, monitoring)
- **how-to/** - Documentation and guides
- **isp/** - ISP detection API tools
- **isp_maxmind/** - MaxMind GeoIP integration
- **modified_php_files/** - Additional modified files for specific features
- **nginx/** - Nginx configuration files
- **nginx_rtmp/** - RTMP module for nginx
- **pytools/** - Python utility scripts
- **small_fixes/** - Quick fix documentation
- **tools/** - Various utility tools
- **wwwdir/** - Modified web-facing files (APIs, portal)
- **index.php** - Landing page for this repository

## Running the Project

The project runs with PHP's built-in server:
```bash
php -S 0.0.0.0:5000
```

## Recent Changes
- 2026-01-02: Initial Replit setup with landing page

## User Preferences
- None set

## Technical Notes
- Language: PHP 8.2
- Port: 5000 (frontend)
- No database required for the documentation site
