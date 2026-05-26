# Votis

Piattaforma per la gestione dello scrutinio durante consigli comunali e votazioni istituzionali.

## Stack

* PHP 8.3
* CodeIgniter 4
* MariaDB/PostgreSQL
* JWT Authentication
* WebSocket realtime

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

## Consiglieri

```http
GET    /councilors
POST   /councilors
GET    /councilors/{id}
PUT    /councilors/{id}
DELETE /councilors/{id}
```

---

## Sedute

```http
GET    /sessions
POST   /sessions
GET    /sessions/{id}
POST   /sessions/{id}/start
POST   /sessions/{id}/close
```

---

## Presenze

```http
GET    /sessions/{id}/attendance
POST   /sessions/{id}/attendance
```

---

## Ordine del Giorno

```http
GET    /sessions/{id}/agenda
POST   /sessions/{id}/agenda
PUT    /agenda/{id}
DELETE /agenda/{id}
```

---

## Votazioni

```http
POST   /votes
POST   /votes/{id}/open
POST   /votes/{id}/close
POST   /votes/{id}/cast
GET    /votes/{id}/results
```

---

## Realtime

```text
/ws/votes/{id}
```

---

## Verbali

```http
GET /sessions/{id}/minutes/pdf
```

---

# Struttura

```text
app/
 ├── Controllers/Api/
 ├── Models/
 ├── Filters/
 ├── Entities/
 ├── Libraries/
 └── Services/
```

---

# Tabelle Principali

```text
users
roles
councilors
sessions
attendance
agenda_items
votes
vote_results
audit_logs
```

---

# Sicurezza

* JWT Authentication
* RBAC
* Audit Log
* HTTPS
* Rate Limiting

---

# Nome Progetto

Votis
