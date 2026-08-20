# Multiplication tables

Generates a multiplication table for a chosen number. Built twice on purpose:
once in the browser with JavaScript, once on the server with PHP, so the two
approaches sit side by side.

## Files

| File | Role |
|---|---|
| `index.html` | Entry form. |
| `script.js` | Client-side generation, no round trip. |
| `tablas.php` | Server-side generation, renders the table in the response. |
| `styles.css` | Layout, responsive down to phone widths. |

## Running it

The JavaScript version needs nothing — open `index.html`. The PHP version needs
a server:

```sh
php -S localhost:8000
```

## Why both

The two files produce the same table by different routes. The JavaScript one
never contacts the server, so it is instant but the logic is visible to anyone
who opens the console. The PHP one costs a request but the computation stays on
the server. Neither is better in the abstract; the exercise is seeing where the
work happens.
