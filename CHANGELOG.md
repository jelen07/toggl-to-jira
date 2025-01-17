# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [1.1.0] - 2023-04-25

### Added

- Added PHPStan on level 8
- Added GitHub actions - PHPStan, Php-Cs-Fixer and Docker image build
- Added the option `--append`. All entries from Toggl are synchronized without creating a diff if the mode `--append` is enabled. Will cause duplicates if the command is run multiple times for the same day.

### Changed

- Changed coding style (new Php-Cs-Fixer configuration).

### Fixed

- Fixed duplicated descriptions in the `--group-by-day` mode.
- Entries from Toggl that are the same as entries from JIRA (same start date and same duration) are only listed in the diff table, but they are not updated.

## [1.0.0] - 2022-08-29

Initial release.

[unreleased]: https://github.com/68publishers/toggl-to-jira/compare/v1.1.0...main
[1.1.0]: https://github.com/68publishers/toggl-to-jira/compare/v1.0.0...v1.1.0
[1.0.0]: https://github.com/68publishers/toggl-to-jira/commits/v1.0.0
