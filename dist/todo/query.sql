SELECT 
    prudact.p_id, 
    prudact.titel, 
    prudact.sub_titel, 
    prudact.category, 
    prudact.desc, 
    prudact.img_path, 
    prudact.price, 
    prudact.available,
    SUM(shopping_cart.crowd) AS total_ordered
FROM 
    shopping_cart 
INNER JOIN 
    prudact 
ON 
    prudact.p_id = shopping_cart.p_id 
WHERE 
    shopping_cart.u_id = 1
GROUP BY 
    prudact.p_id, 
    prudact.titel, 
    prudact.sub_titel, 
    prudact.category, 
    prudact.desc, 
    prudact.img_path, 
    prudact.price, 
    prudact.available;
