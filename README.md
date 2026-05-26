# Votis

Piattaforma per la gestione dello scrutinio durante le elezioni comunali.

## Stack

* PHP 8.3
* CodeIgniter 4
* MariaDB

---

# API

Prefisso:

```text
/api/v1
```

## Auth

```http
POST   /auth/login
POST   /auth/logout
GET    /auth/me
```

---

## Utenti

```http
GET    /users
POST   /users
GET    /users/{id}
PUT    /users/{id}
DELETE /users/{id}
```

---

## Candidati

```http
GET    /candidates
POST   /candidates
GET    /candidates/{id}
PUT    /candidates/{id}
DELETE /candidates/{id}
```

---

## Sezioni Elettorali

```http
GET    /sections
POST   /sections
GET    /sections/{id}
POST   /sections/{id}/open
POST   /sections/{id}/close
```

---

## Scrutinio

```http
GET    /sections/{id}/scrutiny
POST   /sections/{id}/scrutiny
```

---

## Liste Elettorali

```http
GET    /lists
POST   /lists
GET    /lists/{id}
PUT    /lists/{id}
DELETE /lists/{id}
```

---

## Risultati

```http
POST   /results
POST   /results/import
GET    /results/{id}
GET    /results/{id}/totals
```
