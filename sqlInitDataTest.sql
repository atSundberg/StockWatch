INSERT INTO Bank (bank_name)
VALUES ("Nordea");

INSERT INTO Bank (bank_name)
VALUES ("SEB");

INSERT INTO Bank (bank_name)
VALUES ("Handelsbanken");

INSERT INTO Bank (bank_name)
VALUES ("Swedbank");

INSERT INTO Bank (bank_name)
VALUES ("Nordnet");

INSERT INTO Account (bank_id, holder_name)
VALUES (1, "Kalle");

INSERT INTO Account (bank_id, holder_name)
VALUES (2, "Hobbe");

INSERT INTO Stock (stock_name, stock_code, last_price)
VALUES ("Investor", "inv", 150);

INSERT INTO Stock (stock_name, stock_code, last_price)
VALUES ("Apple", "apl", 147);

INSERT INTO Stock (stock_name, stock_code, last_price)
VALUES ("Amazon", "amz", 98);

INSERT INTO Portfolio (account_id, stock_id, amount)
VALUES (1, 2, 3);

INSERT INTO Portfolio (account_id, stock_id, amount)
VALUES (2, 1, 5);

INSERT INTO Portfolio (account_id, stock_id, amount)
VALUES (3, 0, 7);

INSERT INTO Rates (stock_id, open_price, high, low, close_price)
VALUES (1, 15, 16, 14, 15.99);

INSERT INTO Rates (stock_id, open_price, high, low, close_price)
VALUES (2, 77, 83, 75, 79.59);


