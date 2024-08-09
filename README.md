# Chirper app made with Laravel

A mini twitter clone, made with Laravel. Followed the Laravel Bootcamp, made for learning purposes.

## Features

- Registration, Log in, Log out, Remember me option, Password reset, Password change, Email verification.
- "Chirping" a user post, that can be viewed by all register (and verified) users.
- The "chirp" author can edit/delete their posts (chirps).
- Users are by default subscribed to email notifications, that are sent when another user creates a chirp.
- Users can unsubscribe/resubscribe to email notifications.

## Requirements

- Docker

## Development

Once Docker is installed, you can spin up the application using Laravel Sail:

```shell
cd chirper
```

Compose up in detached mode:

```shell
./vendor/bin/sail up -d
```

Run vite to watch for changes in views / css:

```shell
./vendor/bin/sail npm run dev
```

## Checking it out

Open the app in a browser, in http://localhost.

Open the mail server (Mailpit) in http://localhost:1025.

*Enjoy!*
