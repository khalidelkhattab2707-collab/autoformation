use library;
create table library_books(
    id int AUTO_INCREMENT PRIMARY KEY,
    title varchar(150) not null,
    author varchar(100),
    published_year year,
    status ENUM('Available', 'Borrowed', 'Lost') DEFAULT 'Available',
    price decimal(10,2)
  );
  DESCRIBE library_books;
  DROP library_books;