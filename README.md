# Features:
- A user registration system that manages two types of users: Admin and Normal Users
- The blog will have an admin area and a public area separate from each other
- The admin area will be accessible only to logged in admin users and the public area to the normal users and the general public

# In the admin section, two types of admins exist:
### Admin
    Can create, view, update, publish/unpublish and delete ANY post.
    Can also create, view, update and delete topics.
    An Admin user (and only an Admin user) can create another admin user or Author
    Can view, update and delete other admin users
### Author
    Can create, view, update and delete only posts created by themselves
    They cannot publish a post. All publishing of posts is done by the Admin user.
- Only published posts are displayed in the public area for viewing
- Each post is created under a particular topic
- A many-to-many relationship exists between posts and topics.
- The public page lists posts; each post displayed with a featured image, title, and author.
- The user can browse through all posts listings under a particular topic by clicking on the topic
- When a user clicks on a post, they can view the full post and related topics at the bottom of the posts.

### Installation
create "www" folder in root of D:/ Drive.
go inside of www folder and clone core-php-blog

```sh
$ mkdir D:\www
$ cd D:\www
$ git clone https://www.github.com/awaisalrehman/core-php-blog
```

Create Virtual Host
Follow the below steps to Change localhost to custom domain name in XAMP server

1) Open the file C:\Windows\System32\drivers\etc and edit “as Administrator” => hosts file.

    Add the below line at the end and save the file.
    127.0.0.1 corephpblog.local

2) Edit httpd-vhosts.conf file (In my system E:\xampp\apache\conf\extra and edit httpd-vhosts.conf )

    Add the below lines at the end and save the file

        <VirtualHost corephpblog.local>
            ServerName www.corephpblog.local
            ServerAlias corephpblog.local
            DocumentRoot d:/www/core-php-blog
        </VirtualHost>
3) Restart XAMPP and url www.corephpblog.local will load content form d:/www/core-php-blog

or

Configure xampp web server for different root directory
    
- Go to C:\xampp\apache\conf\httpd.conf
- Open httpd.conf
- Find tag : DocumentRoot "C:/xampp/htdocs"
- Edit tag to : DocumentRoot "D:/www/core-php-blog"
- Now find tag and change it to < Directory "D:/www/core-php-blog" >
    
            DocumentRoot "D:/www/core-php-blog"
            <Directory "D:/www/core-php-blog">
Restart Your Apache


License
----

MIT
 
