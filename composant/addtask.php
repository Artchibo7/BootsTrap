<div class="dropdown" id="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Add Task!
    </button>
    <ul class="dropdown-menu" id="dropdown-menu">
        <div class="mb-3">
            <label for="TaskName" class="form-label"></label>
            <input type="text" name="TaskName" class="form-control" id="TaskName" placeholder="Task name" required">
        </div>
        <!-- <ul id="ListContainer">
            <li>t</li>
            <li>t</li>
            <li>t</li>
        </ul> -->

        <div class="input-group mb-3">
            <label for="Priority" style="background-color: purple;">Priority</label>
            <select name="Priority" id="Priority">
                <option>Choose a level </option>
                <option value="0"> Normale</option>
                <option value="1">Importante</option>
                <option value="2">Urgente</option>
            </select>
        </div>
        <div class="input-group mb-3">
            <label for="date" class="form-label"></label>
            <input type="date" class="form-control" id="date" placeholder="date" required">
        </div>
        <div class="input-group mb-3">
            <label for="categories" style="background-color: purple;">Categories</label>
            <select name="categories" id="categories">
                <option>Choose a level </option>
                <option value="0"> Work</option>
                <option value="1">Personal</option>
                <option value="2">Family</option>
                <option value="2">Friends</option>
            </select>
        </div>
        <button type="button" class="btn btn-success" id="addTask">Add Task</button>
    </ul>


</div>