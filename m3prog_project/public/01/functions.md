- strtoupper
Make a string uppercase
strtoupper(string $string): string
Returns the uppercased string.

- strpos
Find the position of the first occurrence of a substring in a string
strpos(string $haystack, string $needle, int $offset = 0): int|false
Returns the position of where the needle exists relative to the beginning of the haystack string (independent of offset). Also note that string positions start at 0, and not 1.

Returns false if the needle was not found.

- file_exists
Checks whether a file or directory exists
file_exists(string $filename): bool
Returns true if the file or directory specified by filename exists; false otherwise.