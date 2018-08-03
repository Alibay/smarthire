BEGIN;

DROP TABLE IF EXISTS public.specialists;
CREATE TABLE public.specialists
(
    id SERIAL PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL
);

DROP TABLE IF EXISTS public.users;
CREATE TABLE public.users
(
    id SERIAL PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);
CREATE UNIQUE INDEX users_username_uindex ON public.users (email);

COMMIT;