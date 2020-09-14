# lunatix-ebookstore-api

## Postman
Note: https://www.ebookstore.local should point to the app public dir by the web server

### List all authors
GET https://www.ebookstore.local/api/authors

### List author with ID = 1
GET https://www.ebookstore.local/api/authors/1

### Add an author
POST https://www.ebookstore.local/api/authors
- required field with content

**name**

### Edit author with ID = 2
PUT https://www.ebookstore.local/api/authors/2
- required field with content

**name**

### Delete author with ID = 3
DELETE https://www.ebookstore.local/api/authors/3

### Get a list of authors with more than 2 books (inclusive)
GET https://www.ebookstore.local/api/authors/multi

### List all books
GET https://www.ebookstore.local/api/books

### List book with ID = 1
GET https://www.ebookstore.local/api/books/1

### Add a book
POST https://www.ebookstore.local/api/books

- required fields with content

**author_id**
AND
**title**

### Edit book with ID = 2
PUT https://www.ebookstore.local/api/books/2
- required field with content

**author_id**
OR
**title**

### Delete book with ID = 3
DELETE https://www.ebookstore.local/api/books/3

### Get a list of books for author with ID 4
GET https://www.ebookstore.local/api/books/author/4

