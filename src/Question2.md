Question 2
==========

** Disclaimer **

I am already aware of the Two Eggs, 100 floors problem. My answer to this question will essentially be the same as follows in this article: http://datagenetics.com/blog/july22012/index.html

However, I will go over the problem and show my understanding of the problem and the potential solutions outlined in the article.

## Method 1 - One by One ##

A MacBook will be dropped from each floor in turn, starting from the lowest floor, up until the top floor, stopping at the floor where it breaks.
This operation could be performed with a singular MacBook, this is due to when the MacBook does break the search can halted, and thus the highest floor has been found.

This method has the following O operations (where n=100):
* Best = O(1)
* Worst = O(n) = 100

## Method 2 - Grouping / Batching ##

By splitting the number of floors into groups whole segments can be skipped with full knowledge that it will not break on lower floors.
Once a device has broken the second device can be used to discover, floor-by-floor between the last successful and last failed drop.

The difficulty in this method is deciding on the size of the group.

Given a group size of m=10, the following O operations (where n=100) are:
* Best = O(2) (Would be O(1) if n == 1)
* Worst = O((n/m) + (m-1)) = 19

The article then goes on to work out a faster solution. This is by reducing m upon each iteration.
This method works because the number of searches per failed segment is reduced by the number of groups already successfully cleared. Therefore making each segment failure equal in lookups regardless of how far that segment is up the building.