# Random Music Genres with Genrenator API

> You're never too old to listen to quiet tropical doom.

The goal of this project is to use Symfony framework to build a simple static website with 2-3 pages.

This website uses [Genrenator API](https://binaryjazz.us/genrenator-api/) to display random genres and genre stories.

## API endpoints

Genre and story endpoints can be fed an additional parameter for more than one result which will return an array of chosen amount of genres/stories.

- https://binaryjazz.us/wp-json/genrenator/v1/genre/ random genre
- https://binaryjazz.us/wp-json/genrenator/v1/story/ random genre story
- https://binaryjazz.us/wp-json/genrenator/v1/story/25/ will return an array of 25 stories
- https://binaryjazz.us/wp-json/genrenator/v1/count total count of genres created by genrenator

## Project navigation

- Home page '/genrenator'
- Genre page '/genrenator/genre' 
- Story page '/genrenator/story'

Homepage has links to genre and story pages, info about the app/website (e.g. "Welcome to [app name]. With the help of the Genrenator API, random genres and genre stories are generated") and it would be nice to also include the total count of genres generated. Genre page contains a list of random genres and story page random genre stories.

## Starting point

Simple starting point for the project. Don't hesitate to experiment and try out the things we've learned in questions and formula practice apps.

### Controller 

Name: GenrenatorController, has functions for home, genre and story.

In templates we should have genrenator folder that contains the following twigs:
- index.html.twig (home)
- genre.html.twig (genre)
- story.html.twig (story)

### Service

- GenreService: getGenres (endpoint: https://binaryjazz.us/wp-json/genrenator/v1/genre/10/)
- StoryService: getStorys (endpoint: https://binaryjazz.us/wp-json/genrenator/v1/story/10/)

Both return an array.
