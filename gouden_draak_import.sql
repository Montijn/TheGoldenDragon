START TRANSACTION;
SET SQL_SAFE_UPDATES = 0;

-- ADD TEMPORARY COLUMN    
ALTER TABLE menu_items
ADD COLUMN dishtype_name VARCHAR(45) AFTER dish_type;

-- INSERT DISH CATEGORIES
INSERT INTO golden_dragon.dish_types (name)
SELECT DISTINCT soortgerecht
FROM gouden_draak.menu;

-- INSERT MENU ITEMS TO DISHES (CHANGE THE FROM VALUE TO CORRECT DB NAME)
INSERT INTO golden_dragon.menu_items (menu_code, menu_code_addition, name, price, description, dishtype_name, dish_type)
SELECT menunummer, menu_toevoeging, naam, price, beschrijving, soortgerecht, 1
FROM gouden_draak.menu;

-- INSERT CORRECT CATEGORY ID IN DISH TABLE
UPDATE golden_dragon.menu_items as menu_items
SET dish_type =
(
    SELECT dish_types.id 
    FROM golden_dragon.dish_types as dish_types
    WHERE dish_types.name = menu_items.dishtype_name
)
WHERE menu_items.id IS NOT NULL;

ALTER TABLE golden_dragon.menu_items DROP dishtype_name;

SET SQL_SAFE_UPDATES = 1;
COMMIT;
