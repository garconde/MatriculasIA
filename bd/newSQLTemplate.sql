CREATE PROCEDURE insercion (per_id int(11), per_nombres VARCHAR(50), per_ape1 VARCHAR(40), per_ape2 VARCHAR(40), per_estrato TINYINT(1))
BEGIN
    INSERT INTO personas VALUES(per_id, per_nombres, per_ape1, per_ape2, per_estrato);
END;

