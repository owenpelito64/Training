# Updates:
#   Sep 2021: Microsoft completely changed their .NET image
#             and this is the new way to use .NET core.
#             A future video will explain the idea of using
#             multi-stage builds -- that's the (2) FROM lines.
FROM mcr.microsoft.com/dotnet/core/sdk:3.1 as builder

WORKDIR /Worker
COPY src/Worker/Worker.csproj .
RUN dotnet restore

COPY src/Worker/ .
RUN dotnet publish -c Release -o /out Worker.csproj

# app image
FROM mcr.microsoft.com/dotnet/core/runtime:3.1

WORKDIR /app
ENTRYPOINT ["dotnet", "Worker.dll"]

COPY --from=builder /out .
