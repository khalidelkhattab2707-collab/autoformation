
--Total Inventory Value: The sum of all book prices.
select sum(price) as sommeTotal from library_books; 

--The total number of books currently marked as 'Available'.
select count(*)  as avaialableBooks from library_books
where STATUS='Available';

--The most expensive and the cheapest book in one query.
select max(price)as  most_expensive , 
       min(price)as cheapest
       from library_books;

--The average price of all books in your library.
 select avg(price)as "average price" from library_books;