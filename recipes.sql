-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2017 at 02:25 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college_recipes`
--

-- --------------------------------------------------------

--
-- Table structure for table `recipes`

CREATE TABLE IF NOT EXISTS `recipes` (
  `ID` int(100) NOT NULL,
  `NAME` varchar(1000) NOT NULL,
  `TYPE` varchar(10) NOT NULL,
  `DIFFICULTY` varchar(20) NOT NULL,
  `VEGETARIAN` varchar(3) NOT NULL,
  `CALORIES` bigint(255) NOT NULL,
  `DURATION` bigint(255) NOT NULL,
  `SERVING` int(100) NOT NULL,
  `INGREDIENT` text NOT NULL,
  `METHOD` text NOT NULL,
  `URL` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`ID`, `NAME`, `TYPE`, `DIFFICULTY`, `VEGETARIAN`, `CALORIES`, `DURATION`, `SERVING`, `INGREDIENT`, `METHOD`, `URL`) VALUES
(1, 'Refried Bean Quesadillas', 'Food', 'EASY', 'YES', 487, 30, 4, '1 tbsp sunflower oil\n1 onion, finely chopped\n2 garlic cloves, finely chopped\n1 tsp cumin seeds\n400g can pinto or kidney beans, rinsed and drained\n2 tsp smoked paprika\n8 flour tortillas\n100g cheddar or Gruyere , coarsely grated\nhandful coriander leaves\n200g tub fresh tomato salsa, plus extra to serve\nsoured cream, to serve', '1. Heat the oil in a large frying pan and cook the onion and garlic for 2 mins. Add the cumin and cook for 1 min more. Tip in the beans, paprika and a splash of water. Using a potato masher, break the beans down as they warm through to make a rough puree. Season generously.\n\n2. Spread the refried beans onto 4 of the tortillas and scatter over the cheese and coriander. Spoon over the salsa, then top with the remaining tortillas to make 4 sandwiches. Wipe the frying pan with kitchen paper and return to the heat or heat a griddle pan. Cook each sandwich for 1-2 mins on each side until the tortillas are crisp and golden and the cheese is melting. Serve warm, cut into wedges, with extra salsa and soured cream for dipping.', 'http://www.bbcgoodfood.com/sites/default/files/styles/recipe/public/recipe_images/recipe-image-legacy-id--365499_11.jpg?itok=5ok7D5Hi'),
(2, 'Smoky Bacon Pot Noodle', 'Food', 'EASY', 'NO', 356, 10, 1, '1 rasher smoked back bacon, trimmed and chopped\r\n2 spring onion, white and green separated and finely sliced\r\n50g frozen pea\r\nquarter tsp paprika\r\n2 tsp cornflour\r\n200ml vegetable stock\r\n150g block straight-to-wok wheat noodle, or equivalent of dried, cooked\r\nsplash Worcestershire sauce', '1. In a small non-stick pan, fry the bacon for a few mins, add the white parts of the spring onions, peas and paprika, then cook for 1 min more. Mix the cornflour with a little of the stock to get a paste, then stir this into the pan with the rest of the stock, noodles and a good splash of Worcestershire sauce. Simmer for a couple of mins until thick and saucy, then scatter with the green parts of spring onion.', 'http://www.bbcgoodfood.com/sites/default/files/styles/recipe/public/recipe_images/recipe-image-legacy-id--338814_11.jpg?itok=Uex2Adm4'),
(3, 'Quick Tomato Soup With Cheesy Garlic Dippers', 'Food', 'EASY', 'YES', 414, 25, 2, '400g can cherry tomatoes\r\n1 tbsp caster sugar\r\n100ml vegetable stock\r\ndash each Tabasco and Worcestershire sauce\r\n2 tbsp mascarpone\r\nfew torn basil leaves (optional)\r\n\r\nFor the dippers\r\n1 medium ciabatta roll, halved\r\n1 garlic clove, halved\r\n125g ball mozzarella cheese, shredded', '1. Put the tomatoes, sugar, stock and sauces into a medium pan with some salt and pepper. Bring to a simmer and cook for 5-10 mins. Stir in the mascarpone and blend to a smooth soup. Return to the pan and keep warm while you make the dippers.\r\n\r\n2. Heat the grill to high and toast the ciabatta until golden. Rub with the garlic, season, then top with the cheese and grill until melted and golden. Slice into fingers and serve with the soup, sprinkled with the basil, if using.', 'http://www.bbcgoodfood.com/sites/default/files/styles/recipe/public/recipe_images/recipe-image-legacy-id--558500_11.jpg?itok=H7uuUXjl'),
(4, 'Quick Bean & Chorizo Chilli', 'Food', 'EASY', 'NO', 463, 20, 2, '100g chorizo, sliced\r\n350g tub fresh tomato and chilli sauce (we used Waitrose)\r\n400g can kidney beans, rinsed and drained\r\n400g can chickpea, rinsed and drained\r\nrice and natural yogurt, or jacket potatoes and soured cream, to serve', '1. Dry-fry the chorizo for a few mins in a non-stick frying pan until crisp. Carefully pour off any fat from the pan, then tip in the sauce and beans with 100ml water. Bring to a simmer, cover, then lower the heat and bubble for 10 mins. Spoon over rice and serve with yogurt.', 'http://www.bbcgoodfood.com/sites/default/files/styles/recipe/public/recipe_images/recipe-image-legacy-id--513575_11.jpg?itok=qr-Kakur'),
(5, 'Spanish Sardines On Toast', 'Food', 'EASY', 'NO', 420, 10, 2, '1 tbsp olive oil\r\n1 garlic clove, chopped\r\n1 red chilli, deseeded and chopped\r\n1 lemon, zest and juice\r\n2 x 120g cans sardines in sunflower oil, drained\r\n4 slices brown bread\r\nhalf small bunch parsley, chopped', '1. Heat the olive oil in a frying pan, then sizzle the garlic clove and red chilli. Add the lemon zest.\r\n2. Add the sardines and heat through for a few mins until warm.\r\n3. Toast the brown bread. Stir the parsley into the sardines, add a squeeze of lemon juice, then divide between the toast and serve.', 'http://www.bbcgoodfood.com/sites/default/files/styles/recipe/public/recipe_images/recipe-image-legacy-id--776558_11.jpg?itok=Av7K3SXu'),
(6, 'Sweet Potato & Pea Curry', 'Food', 'EASY', 'YES', 513, 40, 4, '3 tbsp curry paste from a jar\r\n1 onion, finely chopped\r\n450g potatoes, cut into chunks\r\n2 large sweet potatoes (about 900g) cut into chunks\r\n600ml vegetable stock, from a cube is fine\r\n400ml can coconut milk\r\n175g frozen peas\r\nsmall bunch coriander, roughly chopped', '1. Heat the curry paste in a large pan and stir in the onion. Cover and cook for 5 mins, stirring occasionally, until softened. Add the potatoes, stock and coconut milk to the pan and bring to the boil.\r\n\r\n2. Turn the heat down and simmer the curry for 20 mins until the potato has softened. Add the peas, bring back to the boil and simmer for 2 mins more. Season to taste and spoon the curry into bowls. Scatter over the coriander before you tuck in.', 'http://www.bbcgoodfood.com/sites/default/files/styles/recipe/public/recipe_images/recipe-image-legacy-id--2733_11.jpg?itok=S7VzfRYq'),
(7, 'Moroccan Spiced Mince With Couscous', 'Food', 'EASY', 'YES', 497, 40, 4, '2 tbsp sunflower oil\r\n2 medium onion, roughly chopped\r\n350g pack Quorn mince\r\n1 tbsp ground cumin\r\n1 tsp ground cinnamon\r\n2 tsp ground turmeric\r\n100g ready-to-eat dried apricots quartered\r\n600ml vegetable stock\r\n\r\nFor the couscous\r\n280g couscous\r\ngrated zest of 2 lemons\r\n4 tbsp chopped fresh mint\r\n50g unsalted cashews, toasted under the grill', '1. Heat the oil in a large nonstick pan, add the onions and cook gently for 5 minutes until they soften. Stir in the Quorn and spices (unlike meat and poultry, Quorn doesn’t need to be browned), then add the apricots and stock. Bring to the boil, then turn the heat down and cook gently for 10-15 minutes.\r\n\r\n2. Meanwhile, make up the couscous following the packet instructions – it will take about 450ml boiling water to give it a nice fluffy texture. Fork through the lemon zest and mint. Season to taste.\r\n\r\n3. Spoon the couscous onto serving plates, pile the Quorn mixture on top and scatter with the cashews.', 'http://www.bbcgoodfood.com/sites/default/files/styles/recipe/public/recipe_images/recipe-image-legacy-id--52341_12.jpg?itok=4fpJtOsZ'),
(8, 'Prawn & Coconut Laksa', 'Food', 'EASY', 'NO', 823, 20, 1, '2 tsp oil\r\n1 garlic clove, crushed\r\n1 spring onion, finely chopped\r\n2 tsp finely chopped fresh root ginger\r\n1 green chilli, deseeded and finely chopped\r\njuice from ½ lime\r\n100g raw prawns, any size\r\n165ml can coconut milk\r\n100ml chicken or vegetable stock\r\n100g dried egg noodles\r\nchopped coriander, to serve', '1. Heat the oil in a large pan or wok. When hot, throw in the garlic, spring onion, ginger and green chilli. Cook on a medium heat for 3-4 mins, then squeeze in your lime juice.\r\n\r\n2. Stir in the prawns, then add in the coconut milk and stock. Simmer gently for 5 mins on a low heat until the prawns are pink.\r\n\r\n3. Meanwhile, cook your egg noodles in a pan of boiling water for 4 mins until soft. Drain, then tip into the laksa pan. Season to taste, then serve in a bowl, topped with coriander.', 'http://www.bbcgoodfood.com/sites/default/files/styles/recipe/public/recipe_images/recipe-image-legacy-id--50683_11.jpg?itok=qlp9abnp'),
(9, 'Scrambled Omelette Toast Topper', 'Food', 'EASY', 'YES', 571, 10, 1, '2 egg\r\n1 tbsp crème fraîche\r\n25g cheddar, grated\r\nsmall bunch chive, snipped\r\n1 spring onion, sliced\r\n1 tsp oil\r\n3-4 cherry tomatoes, halved\r\n2 slices crusty bread, toasted', '1. Beat together eggs, crème fraîche, cheese and chives with a little seasoning. Heat oil in a pan, then soften spring onion for a few mins. Add tomatoes and warm through, then pour in egg mixture. Cook over a low heat, stirring, until eggs are just set. Pile over toast.', 'http://www.bbcgoodfood.com/sites/default/files/styles/recipe/public/recipe_images/recipe-image-legacy-id--560516_11.jpg?itok=31QrCLEe'),
(10, 'Quick Sausage Bolognese', 'Food', 'EASY', 'NO', 657, 20, 4, '6 good-quality sausage, skins removed\r\n1 tsp fennel seed\r\n250g pack mushroom, sliced\r\n150ml red wine (optional)\r\n660g jar tomato pasta sauce (we used Loyd Grossman’s tomato & chilli)\r\n300g penne\r\ngrated or shaved Parmesan, to serve', '1. Heat a large, wide frying pan, then crumble in the sausage meat and fennel seeds (there’s no need to add any oil). Fry for a few mins until golden and the fat is released, stirring well to break up the meat. Add the mushrooms and fry for a few mins until beginning to soften. Stir in the wine now, if using, bubble for 1 min, then add the tomato sauce and heat through until bubbling.\r\n\r\n2. Meanwhile, boil the penne. When ready, drain and tip into the sauce. Mix well until completely coated, then divide between four plates, finishing with a little Parmesan.', 'http://www.bbcgoodfood.com/sites/default/files/styles/recipe/public/recipe_images/recipe-image-legacy-id--519470_12.jpg?itok=NJ0OUt01'),
(11, 'Sara''s Iced Coffee', 'Beverage', 'EASY', 'YES', 155, 50, 4, '4 cups fresh brewed coffee \r\n1/2 teaspoon vanilla extract (optional) 1/4 cup white sugar \r\n1/4 cup boiling water \r\n3 cups crushed ice \r\n1/2 cup cream', '1. Refrigerate coffee until cool, about 30 minutes. Chill four glasses, if desired. Stir vanilla extract and sugar in the boiling water until dissolved. Refrigerate until cool, about 30 minutes. Divide the ice and chilled coffee evenly between the four glasses. Stir in cream and sugar mixture, to taste.', 'http://images.media-allrecipes.com/userphotos/250x250/668725.jpg'),
(12, 'Coffee Shake', 'Beverage', 'EASY', 'YES', 173, 5, 1, '1 teaspoon instant coffee granules \r\n3/4 cup milk \r\n1 teaspoon vanilla extract \r\n2 teaspoons white sugar, or to taste \r\n6 ice cubes \r\n2 teaspoons chocolate syrup (optional)', '1. Combine the instant coffee, milk, vanilla extract, sugar, ice, and chocolate syrup in a blender; blend until smooth.', 'http://images.media-allrecipes.com/userphotos/250x250/631819.jpg'),
(13, 'Cafe Latte', 'Beverage', 'EASY', 'YES', 63, 15, 4, '2 cups milk \r\n1 1/3 cups hot freshly brewed dark roast espresso coffee', '1. Heat milk in a saucepan set over medium-low heat. Whisk briskly with a wire whisk to create foam. Brew espresso and pour into 4 cups. Pour in milk, holding back the foam with a spoon. Spoon foam over the top.', 'http://images.media-allrecipes.com/userphotos/250x250/188666.jpg'),
(14, 'Smooth Sweet Tea', 'Beverage', 'EASY', 'YES', 73, 30, 8, '1 pinch baking soda \r\n2 cups boiling water \r\n6 tea bags \r\n3/4 cup white sugar \r\n6 cups cool water', '1. Sprinkle a pinch of baking soda into a 64-ounce, heat-proof, glass pitcher. Pour in boiling water, and add tea bags. Cover, and allow to steep for 15 minutes.\r\n\r\n2. Remove tea bags, and discard; stir in sugar until dissolved. Pour in cool water, then refrigerate until cold.', 'http://images.media-allrecipes.com/userphotos/250x250/216335.jpg'),
(15, 'Honey Lemon Tea', 'Beverage', 'EASY', 'YES', 63, 5, 1, '1 cup water \r\n2 teaspoons honey \r\n1 teaspoon fresh lemon juice \r\n1 teaspoon white sugar, or to taste', '1. Pour water into a mug. Add honey and heat in the microwave for 1 minute and 30 seconds. Stir in lemon juice, mixing until honey is dissolved, then stir in the sugar.', 'http://images.media-allrecipes.com/userphotos/560x315/3392585.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
