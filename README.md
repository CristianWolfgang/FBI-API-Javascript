# FBI API Javascript
you can not access to fbi api by javascript, you should do it in a backend language, so i made a php api that connects to fbi api to then consume it in javascript.

## Endpoint:

### fbi-api.php: this one returns a list of 20 criminals, it is in the page 1, there is a list of params that you can pass:

**pageSize**: it's the number of items returned.

**page**: it is result page.

**sort_on**:	Valid options: publication, modified

**sort_order**: Valid options; desc, asc

**title**: Title of wanted person

**field_offices**: Field office responsible

**person_classification**: Valid options; Main, Victim, Accomplice

**status**: Valid options; na, captured, recovered, located, surrendered, deceased.


you may pass id as param, it will return the criminal with that id.

you may also search by race, eyecolor and sex
