# lazyloader
A php lazy loader for objects.

This simple lazy loader defers the initialization of any object.

This is done by passing an anonymous function to the LazyLoader class, which will resolve the function whenever it is first called, thus creating the object only when it's needed.
