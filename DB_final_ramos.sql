/* Creación de tabla empleados */
CREATE TABLE empleados (
    empleado_id SERIAL NOT NULL,
    empleado_nom1 VARCHAR(100) NOT NULL,
    empleado_nom2 VARCHAR(100) NOT NULL,
    empleado_ape1 VARCHAR(100) NOT NULL,
    empleado_ape2 VARCHAR(100) NOT NULL,
    empleado_dpi INTEGER NOT NULL,
    empleado_edad INTEGER NOT NULL,
    empleado_puesto_id INTEGER NOT NULL,
    empleado_sexo_id INTEGER NOT NULL,
    empleado_area_id INTEGER NOT NULL,
    PRIMARY KEY(empleado_id),
    FOREIGN KEY (empleado_area_id) REFERENCES areas(area_id),
    FOREIGN KEY (empleado_puesto_id) REFERENCES puestos(puesto_id),
    FOREIGN KEY (empleado_sexo_id) REFERENCES sexo(sexo_id)
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

/* Creación de tabla asignaciones */
CREATE TABLE asignaciones  ( 
    asignacion_area_id INTEGER NOT NULL,
    asignacion_empleado_id INTEGER NOT NULL,
    PRIMARY KEY(asignacion_area_id, asignacion_empleado_id),
    FOREIGN KEY (asignacion_area_id) REFERENCES areas(area_id),
    FOREIGN KEY (asignacion_empleado_id) REFERENCES empleados(empleado_id)
);