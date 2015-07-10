#!\bin\sh

app/console geonames:load:countries
app/console geonames:load:timezones
app/console geonames:load:localities ES
