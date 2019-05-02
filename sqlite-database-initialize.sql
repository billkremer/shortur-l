

CREATE TABLE "urls" (
   "id" SERIAL PRIMARY KEY AUTOINCREMENT
 , "userid" integer
 , "url" character varying
 , "shorturl" character varying
 , "hitcount" SERIAL DEFAULT(0)
 , "created_at" datetime
 , "updated_at" datetime
);


