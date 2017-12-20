# API Connection


`To Use:`
```
    $api = new APIController();
    
```
## Example

```
    $api = new ApuController(new Github());
    $api = $api->getApi();
```

**Now api functions can be accessed with:**

```
    $api->apiConnect(String $apiFunction)
```

**Where ```$apiFunction``` is a Github API function I.E.**

* forks
* teams
* hooks
* events
* languages

#### Output is given as an array which can then be parsed

# Extension

All functions are already accessible through the existing class.

To extend to a different REST api such as bitbucket a class would have to be supplied in
the Api/ folder in the namespace Api/ 

#### Example 

```
class BitBucket implements APIInterface {
    public function apiConnection($url){
    // Api connection
    }
}
```

The decorator pattern is a good pattern to use in this situation, as it sticks to the SOLID principles. Each class is decoupled from the others. Typehinting is used to enforce correct use of classes.