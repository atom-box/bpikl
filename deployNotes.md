# Deploy notes

## db setup

### sessions
```
CREATE TABLE IF NOT EXISTS sessions (
    session_id  serial,
    user_id     int NOT NULL,
    date        timestamp
);
```

### users
```
CREATE TABLE IF NOT EXISTS users (
    user_id     serial,
    email       varchar(255) UNIQUE NOT NULL,
    last_reset  timestamp,
    name        varchar(60),
    type        varchar(12) DEFAULT 'free',
    created     timestamp,
    password    varchar(32)
);
```

### links
CREATE TABLE IF NOT EXISTS links (
    link_id     serial,
    session_id  int,
    long        varchar(1000) NOT NULL,
    short       varchar(40) UNIQUE
);