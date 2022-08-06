<h1 align="center">Toggl to Jira</h1>

<p align="center">Simple console application for synchronizing time entries from Toggl into JIRA.</p>

## Getting Started

Please follow these instructions to get a local copy and set it up.

### Environment

- git
- docker & docker-compose

### Installation

1. Clone the repository and install the application

```sh
$ git clone https://github.com/68publishers/toggl-to-jira.git
$ cd toggl-to-jira
$ ./installer
```

2. Open the `.env` file and set up your credentials

| Variable | Type    | Description |
| ------ |---------|-------------|
| APP_DEBUG | Boolean | Enables debug mode for Tracy |
| TOGGL_API_TOKEN | String  | Auth token for your Toggle account |
| JIRA_USERNAME | String | Username (email) of your JIRA account |
| JIRA_API_TOKEN | String | Auth token for your JIRA account |
| JIRA_WEBSITE_URL | String | URL of your JIRA website |

## Synchronization

Synchronization is started with the following command

```sh
$ docker exec -it t2j-app bin/console sync -vv --start <START_DATE> --end <END_DATE> [--overwrite]
```

Options `start` and `end` accepts datetime strings (absolute or relative).
The `overwrite` option tells the application to remove already existing entries in JIRA.

## Description format

Descriptions of time entries in Toggl must follow the following pattern

```
<IssueCode> [<IssueName>] [<OptionalComment>]
```

For example, if the issue in JIRA has code `PROJ-123` and the name of the issue is `UX improvements` then the following examples are acceptable:

- `PROJ-123` - the entry is imported with an empty comment
- `PROJ-123 UX improvements` - the entry is imported with an empty comment
- `PROJ-123 UX improvements Fixed footer on small devices` - the entry is imported with a comment `Fixed footer on small devices`
- `PROJ-123 Fixed footer on small devices` - the entry is imported with a comment `Fixed footer on small devices`

## License

The package is distributed under the MIT License. See [LICENSE](LICENSE.md) for more information.
