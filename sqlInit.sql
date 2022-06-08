CREATE TABLE IF NOT EXISTS Bank(
    id INTEGER PRIMARY KEY, 
    bank_name TEXT
);

CREATE TABLE IF NOT EXISTS Account(
    id INTEGER PRIMARY KEY,
    bank_id INTEGER,
    holder_name TEXT
);

CREATE TABLE IF NOT EXISTS Portfolio(
    id INTEGER PRIMARY KEY,
    account_id INTEGER,
    stock_id INTEGER,
    amount INTEGER
);

CREATE TABLE IF NOT EXISTS Stock(
    id INTEGER PRIMARY KEY,
    stock_name TEXT,
    stock_code TEXT,
    last_price REAL
);

CREATE TABLE IF NOT EXISTS Transactions(
    id INTEGER PRIMARY KEY,
    account_id INTEGER,
    stock_id INTEGER,
    buy_sell TEXT,
    price REAL,
    Timestamp DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS Rates(
    id INTEGER PRIMARY KEY,
    stock_id INTEGER,
    open_price REAL,
    high REAL,
    low REAL,
    close_price REAL,
    rate_date DATE
);