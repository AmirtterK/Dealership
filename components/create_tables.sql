CREATE TABLE
    IF NOT EXISTS cars (
        id int AUTO_INCREMENT PRIMARY KEY,
        sold boolean,
        brand text,
        model text,
        body text,
        exteriorColor text,
        interiorColor text,
        driveType text,
        transmission text,
        price int,
        buildYear int,
        milage int,
        topSpeed float,
        acceleration float,
        liters float,
        shape char(1),
        cylinders int,
        aspiration text,
        eMotor int,
        hp int,
        torque int,
        displacement int,
        weight int,
        width float,
        length float,
        height float,
        wheelBase float,
        description text
    );

CREATE TABLE 
    IF NOT EXISTS credit_cards (
        CardholderName varchar(15),
        CardPassword varchar(15),
        Card_Number varchar(12) PRIMARY KEY,
        Expiry_Month int,
        Expiry_Year int,
        CVV int,
        Balance int
    );