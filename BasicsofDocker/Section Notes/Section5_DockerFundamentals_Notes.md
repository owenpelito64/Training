# Section 5 notes

1.  The Docker client contacted the Docker daemon.
2.  The Docker daemon pulled the "hello-world" image from the Docker Hub.
    (amd64)
3.  The Docker daemon created a new container from that image which runs the
    executable that produces the output you are currently reading.
4.  The Docker daemon streamed that output to the Docker client, which sent it
    to your terminal.

- using docker cli to communicate with the docker daemon.
- informs the docker daemon to pull the hello-world image from the docker.
- run the image
- docker daemon receiving the output from the running container and sending back to us through the terminal.

**image vs container**

## Image

- Is a combination of a file system and parameters. doesn't have any state attached to it and onced built it will never change. It is something you can download build and run

## Container

- act of running an image is called container.

#### Commands in section

```
//runs the linux with the docker
$docker run -it ubuntu bash

//shows directory
$ls -la


//change directory
$cd *name of the directory you want.


```

## Docker Hub

- is a docker registry, a registry contains docker repositories, ;git hub for images

## tag

- is how docker version controls an image

## Building docker image

**2 ways**

1. Run docker container , make changes then commit this save things to a new image layer.

2. Dockerfile - is a blue printer recipe book for creating a docker image.
