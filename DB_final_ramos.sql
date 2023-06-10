/* Creación de tabla empleados */
CREATE TABLE empleados (
    emp_id SERIAL NOT NULL,
    emp_nom1 VARCHAR(100) NOT NULL,
    emp_nom2 VARCHAR(100) NOT NULL,
    emp_ape1 VARCHAR(100) NOT NULL,
    emp_ape2 VARCHAR(100) NOT NULL,
    emp_dpi INTEGER NOT NULL,
    emp_edad INTEGER NOT NULL,
    emp_puesto_id INTEGER NOT NULL,
    emp_sexo_id INTEGER NOT NULL,    
    PRIMARY KEY(emp_id),    
    FOREIGN KEY (emp_puesto_id) REFERENCES puestos(puesto_id),
    FOREIGN KEY (emp_sexo_id) REFERENCES sexo(sexo_id)
);

/* Creación de tabla sexo */
CREATE TABLE sexo  ( 
    sexo_id SERIAL NOT NULL,
    sexo_descr VARCHAR(50) NOT NULL,
    PRIMARY KEY(sexo_id)
);

/* Creación de tabla puestos */
CREATE TABLE puestos ( 
    puesto_id SERIAL NOT NULL,
    puesto_descr VARCHAR(200) NOT NULL,
    puesto_suel DECIMAL(8,2),
    PRIMARY KEY(puesto_id)
);

/* Creación de tabla areas */
CREATE TABLE areas  ( 
    area_id SERIAL NOT NULL,
    area_nom VARCHAR(100) NOT NULL,
    PRIMARY KEY(area_id)
);

/* Creación de tabla asignacion_puestos_areas */
CREATE TABLE asignacion_puestos_areas (
    area_id INTEGER NOT NULL,
    puesto_id INTEGER NOT NULL,
    PRIMARY KEY(area_id, puesto_id),
    FOREIGN KEY (area_id) REFERENCES areas(area_id),
    FOREIGN KEY (puesto_id) REFERENCES puestos(puesto_id)
);
