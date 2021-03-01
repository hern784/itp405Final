DROP TABLE IF EXISTS "public"."businesses";
CREATE SEQUENCE IF NOT EXISTS businesses_id_seq;

CREATE TABLE "public"."businesses" (
    "id" int8 NOT NULL DEFAULT nextval('businesses_id_seq'::regclass),
    "name" varchar(255) NOT NULL,
    "password" varchar(255) NOT NULL,
    "address" varchar(255) NOT NULL,
    "max_occupancy" int8,
    "cur_occupancy" int8,
    PRIMARY KEY ("id")
);


DROP TABLE IF EXISTS "public"."shoppers";
CREATE SEQUENCE IF NOT EXISTS shoppers_id_seq;

CREATE TABLE "public"."shoppers" (
    "id" int8 NOT NULL DEFAULT nextval('shoppers_id_seq'::regclass),
    "username" varchar(255) NOT NULL,
    "password" varchar(255) NOT NULL,
    PRIMARY KEY ("id")
);


DROP TABLE IF EXISTS "public"."appointments";
CREATE SEQUENCE IF NOT EXISTS appointments_id_seq;

CREATE TABLE "public"."appointments" (
    "id" int8 NOT NULL DEFAULT nextval('appointments_id_seq'::regclass),
    "business_id" int8 NOT NULL,
    "shopper_id" int8 NOT NULL,
    "time" time NOT NULL,
    PRIMARY KEY ("id")
);


DROP TABLE IF EXISTS "public"."favorites";
CREATE SEQUENCE IF NOT EXISTS favorites_id_seq;

CREATE TABLE "public"."favorites" (
    "id" int8 NOT NULL DEFAULT nextval('favorites_id_seq'::regclass),
    "business_id" int8 NOT NULL,
    "shopper_id" int8 NOT NULL,
    PRIMARY KEY ("id")
);


DROP TABLE IF EXISTS "public"."comments";
CREATE SEQUENCE IF NOT EXISTS comments_id_seq;

CREATE TABLE "public"."comments" (
    "id" int8 NOT NULL DEFAULT nextval('comments_id_seq'::regclass),
    "business_id" int8 NOT NULL,
    "shopper_id" int8 NOT NULL,
    "comment" varchar(255) NOT NULL,
    PRIMARY KEY ("id")
);

