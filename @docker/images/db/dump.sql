BEGIN;

DROP TABLE IF EXISTS public.recipes;
CREATE TABLE public.recipes
(
    id SERIAL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    author_id INT NOT NULL,
    image_id INT NOT NULL
);

DROP TABLE IF EXISTS public.images;
CREATE TABLE public.images
(
    id SERIAL PRIMARY KEY,
    filename VARCHAR(255)
);

DROP TABLE IF EXISTS public.users;
CREATE TABLE public.users
(
    id SERIAL PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);
CREATE UNIQUE INDEX users_username_uindex ON public.users (username);

ALTER TABLE public.recipes
ADD CONSTRAINT recipes_users_id_fk
FOREIGN KEY (author_id) REFERENCES users (id);
ALTER TABLE public.recipes
ADD CONSTRAINT recipes_images_id_fk
FOREIGN KEY (image_id) REFERENCES images (id);

COMMIT;