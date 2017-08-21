# TODO

## Fixes
- /tasks pages dont redirect based on auth
    - auth seems broken
- Tasks with long descriptions need to ellipsise
    - Click anywhere on task to expand it
- Footer needs to stay down

## Improvements
- Add "Edit" button to edit tasks - on right
    - Open new page to edit, like create task page
- Figure out laravel mix thing to combine css

## Features
- Working unit tests
- Item burndown

### Item Burndown
- Rudimentary approach - count items on page with task class, every 60 seconds
- Use Vue for JavaScript
- Figure out graphs
- Run script every 60 seconds to count tasks and update graph
- Place in bottom segment of the page - bottom 1/4th?

## Stretch Ideas
- Allow ordering tasks by new or old
- Make login/register popups, not new pages
    - Disable buttons based on auth status
- Option to display completed tasks



## New Ideas

- Only pages displayed are welcome - to guests, or tasks - to users
     - Need to change auth module redirect for users to go to tasks, and guests to go to welcome
     - Tasks page should check a variable to see if it just came from a login page
        - If so, display a welcome banner with a button to close
        - Display of banner issued by php, removal done with vue
- Burndown:
    - Script has to run every minute since its a per-minute statistic
    - Find a way to get a DB query via Vue
        - Select tasks for past hour, divide those completed by those incomplete
