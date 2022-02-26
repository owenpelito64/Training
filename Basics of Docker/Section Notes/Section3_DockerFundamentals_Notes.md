# Side notes for section 3

> Docker container is not virtual machine

**VM**

- A virtual machine is a system which acts exactly like a computer.
  In simple terms, it makes it possible to run what appears to be on many separate computers on hardware, that is one computer. Each virtual machine requires its underlying operating system, and then the hardware is virtualized.

**DOCKER**

- Docker is a tool that uses containers to make creation, deployment, and running of application a lot easier. It binds application and its dependencies inside a container.

**VM VS DOCKER**

**Operating System Support**

- The operating system support of Virtual machine and Docker container is very different. From the image above, you can see each virtual machine has its guest operating system above the host operating system, which makes virtual machines heavy. While on the other hand, Docker containers share the host operating system, and that is why they are lightweight.

**Security**

- The virtual machine does no share operating system, and there is strong isolation in the host kernel. Hence, they are more secure as compared to Containers. A container have a lot of security risks, and vulnerabilities as the containers have shared host kernel.

- Also, since docker resources are shared and not namespaced, an attacker can exploit all the containers in a cluster if he/she gets access to even one container. In a virtual machine, you don’t get direct access to the resources, and hypervisor is there to restrict the usage of resources in a VM.

**Portability**

- Docker containers are easily portable because they do not have separate operating systems. A container can be ported to a different OS, and it can start immediately. On the other hand, virtual machines have separate OS, so porting a virtual machine is difficult as compared to containers, and it also takes a lot of time to port a virtual machine because of its size.

**Performance**

- Comparing Virtual machines and Docker Containers would not be fair because they both are used for different purposes. But the lightweight architecture of docker its less resource-intensive feature makes it a better choice than a virtual machine. As a result, of which containers can startup very fast compared to that of virtual machines, and the resource usage varies depending on the load or traffic in it.
  Unlike the case of virtual machines, there is no need to allocate resources permanently to containers. Scaling up and duplicating the containers is also an easy task compared to that of virtual machines, as there is no need to install an operating system in them.

**Difference**

| Virtual Machine                                | Docker Container                                           |
| ---------------------------------------------- | ---------------------------------------------------------- |
| Hardware-level process isolation               | OS level process isolation                                 |
| Each VM has a separate OS                      | Each container can share OS                                |
| Boots in minutes                               | Boots in seconds                                           |
| VMs are of few GBs                             | Containers are lightweight (KBs/MBs)                       |
| Ready-made VMs are difficult to find Pre-built | docker containers are easily available                     |
| VMs can move to new host easily                | Containers are destroyed and re-created rather than moving |
| Creating VM takes a relatively longer time     | Containers can be created in seconds                       |
| More resource usage                            | Less resource usage                                        |

**when to use VM or Docker**

### VM

- to isolate or test entire system

### Docker

- isolate and deliver applications
