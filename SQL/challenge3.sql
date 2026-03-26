
--List all books, but only show the title, author, and price.
select title,author,price from library_books ;

--Find all books that cost between 100 MAD and 300 MAD.
select * from library_books
where price BETWEEN 100 and 300;

--Find all books published after the year 2020
select * from library_books
where published_year >2020;

--Find all books that have the word "PHP" anywhere in their title.
select * from library_books
 where title like '%php%';

--The Availability Check: List all books that are NOT currently 'Lost', sorted by the most recent published_year.
select * from library_books 
where status !='lost';
order by published_year desc;

--The Author Audit: List all unique (DISTINCT) authors in the library
select DISTINCT author from library_books;

--    The Formatting: Show the book titles in UPPERCASE and the price rounded to the nearest whole number.

SELECT 
    UPPER(title) AS title_uppercase,
    ROUND(price) AS rounded_price
FROM library_books;
