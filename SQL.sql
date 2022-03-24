CREATE TABLE public.aluno (
	id serial4 NOT NULL,
	foto varchar NULL,
	nome varchar NOT NULL,
	endereco varchar NOT NULL,
	created_at timestamp NULL,
	updated_at timestamp NULL,
	CONSTRAINT aluno_pkey PRIMARY KEY (id)
);