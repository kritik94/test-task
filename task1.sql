SELECT users.name, comments.text 
  FROM users, (SELECT * from comments ORDER by comments.id DESC) as comments
  WHERE users.id = comments.user_id GROUP BY comments.user_id;
