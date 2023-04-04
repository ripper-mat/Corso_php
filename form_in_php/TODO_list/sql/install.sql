create Table `tasks` (
    `task_id` INT(255) NOT NULL,
    `user_id` INT(255),
    `name` VARCHAR(255),
    `due_date` DATE,
    `done` BOOLEAN,
    PRIMARY KEY (user_id),
    Foreign Key (user_id) REFERENCES user(user_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `tasks`
  ADD PRIMARY KEY (`task_id`);

  ALTER TABLE `tasks`
  MODIFY `task_id` int(255) NOT NULL AUTO_INCREMENT;

  TRUNCATE TABLE `tasks`;

   DROP Table `tasks`;