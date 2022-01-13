# Pattern: Generator Delegation

## Category

Function

## Definition

## Instances

### Instance 1

- CATEGORY: D2
- FEATURE vs INTERNAL API: FEATURE
- INPUT SANITIZERS: NO
- SOURCES AND SINKS: NO
- NEGATIVE TEST CASES: NO
- CODE:


```javascript
function* func1(val) {
    yield val;
}
  
function* func2(val) {
    //it delegates to func1
    yield* func1(val);
}

const parsed = route.parse(req.url);
const query  = querystring.parse(parsed.query);
var b_to_func = query.name;

const iterator = func2(b_to_func);
res.writeHead(200, {"Content-Type" : "text/html"});
res.write(iterator.next().value);	
res.end();
```

- MEASUREMENT:

|     Tool      | LGTM | NodeJsScan | Comm_3 | Comm_1 | Comm_2 | Vulnerable |
| :-----------: | :--: | :--------: | :------: | ------- | --------- | ---------- |
| Vulnerability | NO   |    NO      |    NO   |    YES  |    NO     | YES        |
Measurements Date: 20 May 2021

- DISCOVERY:



**Ideal discovery rule**:

```
if(yieldexpression && delegate == true)
```

Ideal discovery rule matches with implementation.

**Implementation:**

Based on Abstract Syntax Tree (AST) and Babel parser to generate and traverse it.

```
path.isYieldExpression() && path.node.delegate === true
```

**Discovery Difficulty Level:  LOW**

- PRECONDITIONS:
   1.
- TRANSFORMATION:
```
```
### Instance 2

- CATEGORY: D4
- FEATURE vs INTERNAL API: FEATURE
- INPUT SANITIZERS: NO
- SOURCES AND SINKS: NO
- NEGATIVE TEST CASES: NO
- CODE:

```javascript
global.func1 = function* func1(val) {
    yield val;
}
  
function* func2(val, func) {
    yield* global[func](val);
}

const parsed = route.parse(req.url);
const query  = querystring.parse(parsed.query);
var b_to_func = query.name;
var func_to_call = query.func.toString().trim();

const iterator = func2(b_to_func, func_to_call);
        
res.writeHead(200, {"Content-Type" : "text/html"});
res.write(iterator.next().value);	
res.end();
```

- MEASUREMENT:

|     Tool      | LGTM | NodeJsScan | Comm_3 | Comm_1 | Comm_2 | Vulnerable |
| :-----------: | :--: | :--------: | :------: | ------- | --------- | ---------- |
| Vulnerability |  NO  |      NO    |    NO   |    NO   |    YES     | YES        |
Measurements Date: 17 July 2021

- DISCOVERY:



**Ideal discovery rule**:

```
if(yieldexpression && delegate == true)
```

Ideal discovery rule matches with implementation.

**Implementation:**

Based on Abstract Syntax Tree (AST) and Babel parser to generate and traverse it.

```
path.isYieldExpression() && path.node.delegate === true
```

**Discovery Difficulty Level:  LOW**

- PRECONDITIONS:
   1.
- TRANSFORMATION:
```
```

## Popularity (Measurements)

Open Source Web Applications (from testbed):

|    Web Application    | #Occurences |
| :-------------------: | :---------: |
|      Mattermost       |      /      |
|        PayPal         |      /      |
|      SoundCloud       |      /      |
| Facebook Business SDK |      /      |
|      Vynchronize      |      /      |
|      Wiki Vnext       |      /      |
|         Uppy          |      /      |
|        SheetJs        |      /      |
|        Meteor         |      /      |
|        Express        |      /      |
|          Pug          |      /      |
|         Ember         |      /      |
|          Vue          |      /      |
|        JQuery         |      /      |



