<!-- Practical Considerations
GET for Search Forms: Use GET when designing a product search or filtering system because users might want to share or bookmark the resulting URL.
POST for Sensitive Data: Use POST for submitting sensitive data like passwords or personal details to enhance security and privacy.
By understanding the nuances of GET and POST, developers can design web applications that are both user-friendly and secure. 

1Purpose:
Used to retrieve data from a server without causing any side effects.
Often employed when the request has no lasting effect on the server.

2Characteristics:
Appends form data to the URL as query parameters.
Data is visible in the browser’s address bar, making it less secure.
Has a size limit for URL length, depending on the browser.
Can be cached, bookmarked, and logged.

3.When to Use:
When the request is idempotent (does not change server state).
For search forms, filters, or navigation where data sharing or bookmarking is useful.
-->



<form action="/search" method="GET">
    <input type="text" name="query" placeholder="Search products">
    <button type="submit">Search</button>
</form>



<form action="/register" method="POST">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Register</button>
</form>
