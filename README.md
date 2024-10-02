# Nix Events and Productions

## Objective

A website platform that allows users to be recommended suitable event packages for clients. It is also a CMS for coordinators to handle content viewing and transactions with end-clients.

## Requirements

-   PHP >= 8.10
-   Windows >= 7.0

## Installation

-   Open terminal and clone this repository using `git clone https://github.com/godoin/nix` or `gh repo clone godoin/nix`
-   Clone it to /htdocs (for xampp) or /www (for laragon)
-   Copy the `.env.example` and rename to `.env`
-   Fill the `.env` variables.
-   Generate the app key using `php artisan key:generate`
-   Ensure the following are active `mysql` and apache` are active.
-   Run database migrations using `php artisan migrate`
-   Run the server using `php artisan serve` and open using `http:127.0.0.1:8000`
-   If ever you do encounter routing, view or db problems use the following:
-   use `php artisan optimize`
-   use `php artisan migrate:fresh`
-   rerun `php artisan serve`

## License

This project is under the MIT License.
