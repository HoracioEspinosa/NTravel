
DELIMITER ;

CALL INSERT_CATEGORIES('TOUR ECOLÓGICO');

CALL INSERT_LOCATIONS('21.1437017','-86.9260116'); #CANCUN
CALL INSERT_LOCATIONS('21.2425466','-86.755116'); # ISLA MUJERES
CALL INSERT_LOCATIONS('20.4320275','-87.0143395'); # COZUMEL
CALL INSERT_LOCATIONS('21.5227804','-87.3879634'); # HOLBOX
CALL INSERT_LOCATIONS('18.6696524','-88.41682'); # BACALAR
CALL INSERT_LOCATIONS('18.6811901','-87.7503598'); # MAHAHUAL


CALL INSERT_A_NEW_TOUR('cancun', 'Cancún es una ciudad mexicana con playas paradisíacas de arena blanca y mar turquesa, acuarios para nadar con delfines, ruinas mayas a pocos pasos de tu hotel, islas con playas desiertas, un mar transparente lleno de vida para hacer snorkel y buceo, buena vida nocturna, una gastronomía única en el mundo y decenas de destinos cercanos para descubrir en la Riviera Maya.',860, 'MÉXICO', 5, 586, NOW(), 10, 1,1, 0);
CALL INSERT_A_NEW_TOUR('isla mujeres', 'Isla Mujeres es una isla que se localiza cruzando la bahía desde Basaseachi. Sus aguas tibias y transparentes son el hogar perfecto para los delfines y tortugas, y nadar con ellos es una de las más atractivas actividades que pueden realizarse aquí.!', 600, 'MÉXICO', 5, 423, NOW(), 10, 1,2,0);
CALL INSERT_A_NEW_TOUR('cozumel', 'Ubicada en el Caribe mexicano, Cozumel es una isla llana formada de roca caliza misma que proviene de los arrecifes. Los cenotes formados por la filtración de agua a través de la piedra caliza durante miles de años pueden ser explorados nadando o mediante actividades como el snorkel y el buceo; pueden apreciarse distintas especies marinas.', 455, 'MÉXICO', 5, 353, NOW(), 10, 1,3, 0);
CALL INSERT_A_NEW_TOUR('holbox', 'Al llegar a Holbox uno sabe que descubrió algo especial. Su nombre significa hoyo negro, aunque en realidad todo es verdor y transparencia. Entre selva y mar, la isla desborda encantos para todo tipo de viajeros. Recorre sus manglares en kayak, ten un encuentro cercano con el pez más grande del mundo y descubre por qué este destino es sinónimo de belleza, tranquilidad, aventura y placer.', 990, 'MÉXICO', 5, 723, NOW(), 10, 1,4, 0);
CALL INSERT_A_NEW_TOUR('bacalar', 'Bacalar es una pintoresca comunidad en la que amantes de la naturaleza, la aventura, la historia y las manifestaciones culturales encuentran un perfecto escenario.', 860, 'MÉXICO', 5, 923, NOW(), 10, 1,5, 0);
CALL INSERT_A_NEW_TOUR('mahahual', 'El pequeño pueblo pesquero de Mahahual será el lugar ideal para que goces de unas vacaciones de ensueño, sin preocupaciones y lejos de la vida tan ajetreada de las grandes urbes. Comienza el día navegando por la zona lagunar que nace del rompeolas formado por el arrecife. Sumérgete en sus aguas azul turquesa, bucea y descubre bellezas inimaginables.', 600, 'MÉXICO', 5, 235, NOW(), 10, 1,6, 0);

CALL INSERT_INCLUDES("Hotel pick up", "Sin descripción", 1);
CALL INSERT_INCLUDES("Light Breakfast", "Sin descripción", 1);
CALL INSERT_INCLUDES("Soft drinks and bottled water", "Sin descripción", 1);
CALL INSERT_INCLUDES("Life jacket", "Sin descripción", 1);
CALL INSERT_INCLUDES("Snorkel equipment", "Sin descripción", 1);
CALL INSERT_INCLUDES("Fresh, delicious fish ceviche", "Sin descripción", 1);
CALL INSERT_INCLUDES("Certified multilingual guide", "Sin descripción", 1);
CALL INSERT_INCLUDES("Free NEW NatGeo snorkel", "Sin descripción", 1);

CALL INSERT_INCLUDES("Hotel pick up", "Sin descripción", 2);
CALL INSERT_INCLUDES("Light Breakfast", "Sin descripción", 2);
CALL INSERT_INCLUDES("Soft drinks and bottled water", "Sin descripción", 2);
CALL INSERT_INCLUDES("Life jacket", "Sin descripción", 2);
CALL INSERT_INCLUDES("Snorkel equipment", "Sin descripción", 2);
CALL INSERT_INCLUDES("Fresh, delicious fish ceviche", "Sin descripción", 2);
CALL INSERT_INCLUDES("Certified multilingual guide", "Sin descripción", 2);
CALL INSERT_INCLUDES("Free NEW NatGeo snorkel", "Sin descripción", 2);

CALL INSERT_INCLUDES("Hotel pick up", "Sin descripción", 3);
CALL INSERT_INCLUDES("Light Breakfast", "Sin descripción", 3);
CALL INSERT_INCLUDES("Soft drinks and bottled water", "Sin descripción", 3);
CALL INSERT_INCLUDES("Life jacket", "Sin descripción", 3);
CALL INSERT_INCLUDES("Snorkel equipment", "Sin descripción", 3);
CALL INSERT_INCLUDES("Fresh, delicious fish ceviche", "Sin descripción", 3);
CALL INSERT_INCLUDES("Certified multilingual guide", "Sin descripción", 3);
CALL INSERT_INCLUDES("Free NEW NatGeo snorkel", "Sin descripción", 3);

CALL INSERT_INCLUDES("Hotel pick up", "Sin descripción", 4);
CALL INSERT_INCLUDES("Light Breakfast", "Sin descripción", 4);
CALL INSERT_INCLUDES("Soft drinks and bottled water", "Sin descripción", 4);
CALL INSERT_INCLUDES("Life jacket", "Sin descripción", 4);
CALL INSERT_INCLUDES("Snorkel equipment", "Sin descripción", 4);
CALL INSERT_INCLUDES("Fresh, delicious fish ceviche", "Sin descripción", 4);
CALL INSERT_INCLUDES("Certified multilingual guide", "Sin descripción", 4);
CALL INSERT_INCLUDES("Free NEW NatGeo snorkel", "Sin descripción", 4);

CALL INSERT_INCLUDES("Hotel pick up", "Sin descripción", 5);
CALL INSERT_INCLUDES("Light Breakfast", "Sin descripción", 5);
CALL INSERT_INCLUDES("Soft drinks and bottled water", "Sin descripción", 5);
CALL INSERT_INCLUDES("Life jacket", "Sin descripción", 5);
CALL INSERT_INCLUDES("Snorkel equipment", "Sin descripción", 5);
CALL INSERT_INCLUDES("Fresh, delicious fish ceviche", "Sin descripción", 5);
CALL INSERT_INCLUDES("Certified multilingual guide", "Sin descripción", 5);
CALL INSERT_INCLUDES("Free NEW NatGeo snorkel", "Sin descripción", 5);

CALL INSERT_INCLUDES("Hotel pick up", "Sin descripción", 6);
CALL INSERT_INCLUDES("Light Breakfast", "Sin descripción", 6);
CALL INSERT_INCLUDES("Soft drinks and bottled water", "Sin descripción", 6);
CALL INSERT_INCLUDES("Life jacket", "Sin descripción", 6);
CALL INSERT_INCLUDES("Snorkel equipment", "Sin descripción", 6);
CALL INSERT_INCLUDES("Fresh, delicious fish ceviche", "Sin descripción", 6);
CALL INSERT_INCLUDES("Certified multilingual guide", "Sin descripción", 6);
CALL INSERT_INCLUDES("Free NEW NatGeo snorkel", "Sin descripción", 6);


CALL INSERT_IMAGES('isla_mujeres.jpg', 'Sin descripción', 2);
