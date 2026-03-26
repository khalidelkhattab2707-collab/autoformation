       
       --Show each status (Available, Borrowed, Lost) and how many books belong to each
       select status,COUNT(*)as nombre_book
       from library_books
       GROUP by STATUS;

       --Show the total value of books owned by each author.
       SELECT author,count(*) as total_books
       from library_books
       GROUP by author;

       --Show only the authors whose total book value is greater than 500 MAD (use HAVING).

       SELECT author,price from 
       library_books
       GROUP BY author 
       HAVING price >30;
       