CREATE TABLE Experiencia (
    id INT AUTO_INCREMENT PRIMARY KEY,
    empresa VARCHAR(100),
    puesto VARCHAR(100),
    descripcion TEXT,
    fecha_inicio DATE,
    fecha_fin DATE DEFAULT NULL
);

-- Inserción de Experiencia Adicionales
INSERT INTO experiencia (empresa, puesto, descripcion, fecha_inicio, fecha_fin) VALUES
(3, 'Seag', 'Técnico Informático'),
(4, 'LesNeus', 'Técnico de sistemas informáticos'),
(5, 'LifeInformatica', 'Técnico de montaje');

CREATE TABLE Estudios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    institucion VARCHAR(100),
    titulo VARCHAR(100),
    fecha_inicio DATE,
    fecha_fin DATE
);

INSERT INTO Estudios (institucion, titulo, fecha_inicio, fecha_fin) VALUES
('Institut Puig Castellar', 'Desarrollo de Aplicaciones Web', '2024-09-12', NULL),
('Institut Puig Castellar', 'Desarrollo de Aplicaciones Multiplataforma', '2022-09-05', '2024-06-21')
('Institut Puig Castellar', 'Sistemas Microinformáticos y Redes', '2020-09-12', '2022-06-21');



CREATE TABLE Tecnologias (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    descripcion VARCHAR(255) NOT NULL
);

INSERT INTO Tecnologias (nombre, descripcion) VALUES
('HTML5', 'HTML es el componente más básico de la Web. Define el significado y la estructura del contenido web.'),
('CSS3', 'CSS es el lenguaje de estilos utilizado para describir la presentación de documentos HTML o XML.'),
('JAVA', 'Java es un lenguaje de programación y una plataforma informática que fue comercializada por primera vez en 1995 por Sun Microsystems.'),
('MySQL', 'MySQL es un sistema de gestión de bases de datos de código abierto desarrollado por Oracle.'),
('TypeScript', 'TypeScript es un lenguaje de programación libre y de código abierto desarrollado y mantenido por Microsoft.'),
('JavaScript', 'JavaScript es un lenguaje de programación interpretado, dialecto del estándar ECMAScript.');




CREATE TABLE Proyectos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    descripcion TEXT NOT NULL,
    enlace VARCHAR(255) NOT NULL
);



INSERT INTO Proyectos (nombre, descripcion, enlace) VALUES
('ShopList', 'ShopList es una innovadora aplicación de compra de vestimenta que revoluciona la forma en que compras y gestionas tu guardarropa. Con ShopList, puedes crear listas detalladas de ropa y accesorios, personalizadas según tus gustos y necesidades. Además de organizar tus prendas, ShopList te permite compartir tus listas con amigos, familiares o seguidores, permitiéndote inspirar a otros con tus elecciones de moda y descubrir nuevas tendencias.', 'https://github.com/IvanBermejoHidalgo/ShopList');

