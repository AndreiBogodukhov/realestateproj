CREATE TABLE employees (
    id_employee INT AUTO_INCREMENT PRIMARY KEY,
    employee_name_ru VARCHAR(255),
    employee_name_en VARCHAR(255),
    position_ru VARCHAR(255),
    position_en VARCHAR(255)
);

CREATE TABLE photo_employees (
    id_photo_employee INT AUTO_INCREMENT PRIMARY KEY,
    id_employee INT,
    photo_path VARCHAR(255),
    FOREIGN KEY (id_employee) REFERENCES employees(id_employee)
);