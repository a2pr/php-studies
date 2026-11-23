### String functrions and concepts

#### Double or single quoted

Double interpret special characters, such as variables with the string.

Single, do not interpret special char or variables, it returns literals

#### srtlen

returns the llength of a string

#### str_world_count

calculates the number of words

#### strpos

searches for a specified text within a string, if not found returns false, if found returns the char position on the first match

#### str_pad

add a certain amount of char to a string

#### strtoupper

converts string to upper case

#### strtolower

converts string to lower case

#### str_replace

subtitues certain characters with others within a string

#### strcmp

compare a variable with a string or a new variable

#### str_shuffle

shuffle the char in a string. If equals returns 0

#### strrev

reverses a string

#### trim

eliminates any whitespace from beginning to the end

#### explode

divides a string into an array, it first parameter determines where the string will be split

#### implode

makes an array of values into a string using the first param as the char to join them

#### substr

indicate the starting index and the desired number of char to return, ($string, index, amount of char)

omitting the last parameter will extend the range to the end of the string

using negative values for the index will start the slice from the end of the string

### Array functions

#### array_map

applies callback function to every element of an array an returns a new array, callback can be a anonymus function or a defined function

#### array_filter

filters element of an array using a callback function

#### array_reduce

Reduces an array to a single value using a callback function, the initial value can be set as a param

#### count

returns the number of elements in an array

#### array_push

add elements to the end of an array

#### array_pop

remove the last element of an array and returns the element

#### array_shift

remove and returns the first element of an array

#### array_unshift

add elements to the beginning of an array

#### array_walk

applies a callback to an array  and modifies the contents of the array

#### array_diff

returns values from first array that are not present in the other arrays

#### array_intersect

returns values that exist in all provided arrays

#### array_unique

return array with all duplicate values removed

#### sort

sort array in ascending order by values

#### rsort

sort array in descending order by values

#### asort

sort array by values in ascending order, maintains key-value association

#### arsort

sort array by values in descending order, maintains key-value association

#### ksort

sort array by keys in ascending order

#### krsort

sort array by keys in descending order