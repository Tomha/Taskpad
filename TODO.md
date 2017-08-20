# TODO

## Fixes
- /tasks pages dont redirect based on auth
- Allow blank descriptions
- Task creation page still uses internal CSS

## Improvements
- Place tasks in scrollable div - 3/4ths of page
- Reserve 1/4th of page for graph
- Add "Complete" button for tasks
    - Checkbox on left?
- Add "Edit" button to edit tasks - on right
    - Open new page to edit, like create task page
- If description wider than page, click task to expand
- Display task age or creation date
- Figure out laravel mix thing to combine css
- Clean up css from bootstrap
- Create dedicated header (partial)
- Create dedicated footer (partial)

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


## Site Flow
- Always go to /home from /
- For guests, /home displays welcome page
- For users, /home says you are now logged in type message
	- Sould make sense to be displayed if you just logged in, or manually navigated there
	- Like a dashbord
- Have a header with a link to /home, /tasks, and login actions on the right
	- If signed in, actions have your name with logout option in popdown or page
	- If not signed in, actions say "login/signup" and have popdown to links

## New Ideas
- Partial for footer on every page
    - Contain link to github and a generic copyright taskpad 2017 doodad
- Partial for header on every page
    - Link to home page (The "Taskpad" label) and session management on right
- New session management
    - Top right either displays "Sign Up/Register" for guests, or "Jon Doe" for users
        - When guests click, they get a popdown with buttons to sign in or register
        - When users click, the get a popdown with a button to sign out
- Only pages displayed are welcome - to guests, or tasks - to users
     - Need to change auth module redirect for users to go to tasks, and guests to go to welcome
     - Tasks page should check a variable to see if it just came from a login page
        - If so, display a welcome banner with a button to close
        - Display of banner issued by php, removal done with vue
- Welcome page redesign
    - display "Taskbar" and lorem ipsum in a carosoulle type position - top 2/3
    - Login/sign up buttons below lorem ipsum
    - Generic testimony bottom 1/3
- Task page redesign
    - Tasks want full vertical height
    - Bar on left or right for burndown?
        - Should be minimisable
    - Tasks go in a box with rounded corners
        - [ ] Title - Hey look this is a description and such it has many words... (_EDIT_)
        - Check checkbox to complete (use JS to submit?)
- Task management
    - button to complete task should be checkbox left of task title
    - Clicking complete button should submit form and reload page
        - Would like to not reload page, but not sure how to do with JS eyt
    - Clicking add can work as usual
        - Could find place for "add task" form on the tasks page? at top? on right?
- Burndown:
    - Script has to run every minute since its a per-minute statistic
    - Find a way to get a DB query via Vue
        - Select tasks for past hour, divide those completed by those incomplete
