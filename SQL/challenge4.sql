--Setup: Create a second table called categories with id (PK) and name.
create table categories(
  id_categories int PRIMARY KEY,
  nom_categories varchar(50)
)

--link: In your library_books table, add a column category_id (INT).
alter table library_books  add id_categories int ;

alter table library_books 
add constraint fk_categories 
foreign key (id_categories) references categories(id_categories);
 
--Action: Assign a category ID to each book in your database.
INSERT into categories (nom_categories) VALUES
('Fiction'),
('Classic'),
('Drama'),
('Romance'),
('Adventure');
UPDATE library_books set id_categories=1 where title ='Don Quixote';
UPDATE library_books set id_categories=2 where title ='Alices Adventures';
UPDATE library_books set id_categories=3 where title ='Jane Eyre';
UPDATE library_books set id_categories=4 where title ='Little Women';
UPDATE library_books set id_categories=5 where title ='Olicer Twist';
UPDATE library_books set id_categories=1 where title ='Dracula';
UPDATE library_books set id_categories=1 where title ='Heidi';
UPDATE library_books set id_categories=2 where title ='Ulysses';

--The Query: Write a SELECT statement that joins both tables to show the Book Title and the Category Name side-by-side
select library_books.title ,
categories.nom_categories 
from library_books
INNER JOIN categories
WHERE categories.id_categories=library_books.id_categories;

