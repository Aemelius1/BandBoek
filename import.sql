DROP
    DATABASE IF EXISTS bandboek;
CREATE DATABASE bandboek; USE
    bandboek;
CREATE TABLE gebruiker(
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    gebruikersnaam VARCHAR(30) NOT NULL,
    email VARCHAR(255) NOT NULL,
    wachtwoord VARCHAR(64) NOT NULL
); INSERT INTO gebruiker(
    gebruikersnaam,
    email,
    wachtwoord
)
VALUES(
    "peter",
    "peter@mail.com",
    "wachtwoord"
),(
    "tim",
    "tim@mail.com",
    "wachtwoord"
),(
    "julia",
    "julia@mail.com",
    "wachtwoord"
),(
    "frank",
    "frank@mail.com",
    "wachtwoord"
),(
    "femke",
    "femke@mail.com",
    "wachtwoord"
),(
    "maarten",
    "maarten@mail.com",
    "wachtwoord"
);

CREATE TABLE advertentie(
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    titel VARCHAR(255) NOT NULL,
    advertentieText TEXT NULL,
    genre ENUM(
        "Blues",
        "Country",
        "Folk",
        "Jazz",
        "Metal",
        "Pop",
        "Punk",
        "R&B",
        "Rock",
        "Ska"
    ) NOT NULL,
    provincie ENUM(
        "Drenthe",
        "Flevoland",
        "Friesland",
        "Gelderland",
        "Groningen",
        "Limburg",
        "Noord-Brabant",
        "Noord-Holland",
        "Overijssel",
        "Utrecht",
        "Zeeland",
        "Zuid-Holland"
    ) NOT NULL,
    muzikant ENUM(
        "Bassist",
        "Blazer",
        "Drummer",
        "Gitarist",
        "Strijker",
        "Toetsenist",
        "Vocalist",
        "Overig"
    ) NOT NULL,
    email VARCHAR(255) NOT NULL,
    isBand BOOLEAN NOT NULL
); 

INSERT INTO advertentie(
    titel,
    advertentieText,
    genre,
    provincie,
    muzikant,
    email,
    isBand
)
VALUES(
    "Beginnende rockband zoekt drummer",
    "Wij zijn een groep vrienden die al langere tijd samen spelen, maar wij zijn nodig op zoek naar een drummer",
    "Rock",
    "Gelderland",
    "Drummer",
    "peter@mail.com",
    true
),(
    "Ervaren jazz band zoekt bassist",
    "Wij zijn op zoek naar een ervaren bassist om lekker mee te jammen",
    "Jazz",
    "Overijssel",
    "Bassist",
    "tim@mail.com",
    true
),(
    "Pop coverband zoekt pianist",
    "Wij treden regelmatig op en zijn op zoek naar iemand die snel onze pianist kan vervangen",
    "Pop",
    "Noord-Holland",
    "Toetsenist",
    "julia@mail.com",
    true
),(
    "Violist is op zoek naar mensen om country muziek mee te spelen",
    "Ik speel al langere tijd viool, maar ik heb tot nu toe alleen klasssieke stukken gespeeld, en ik zou graag een keer country muziek willen spelen",
    "Country",
    "Zeeland",
    "Strijker",
    "frank@mail.com",
    false
),(
    "R&B zanger op zoek naar band",
    "Ik zit al langere tijd zangles, en ik zou graag de grote stap willen maken om een keer echt op te treden. Ik zing voornamelijk R&B",
    "R&B",
    "Drenthe",
    "Vocalist",
    "femke@mail.com",
    false
),(
    "Metal gitarist op zoek naar band",
    "Ik heb al wat ervaring met het spelen in bandjes, maar ik heb voornamelijk in rock bands gespeeld. Ik zou graag in een echte metal band willen spelen",
    "Metal",
    "Groningen",
    "Gitarist",
    "maarten@mail.com",
    false
);