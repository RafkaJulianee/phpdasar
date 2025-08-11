import pygame
import random

# Inisialisasi pygame
pygame.init()
WIDTH, HEIGHT = 600, 400
screen = pygame.display.set_mode((WIDTH, HEIGHT))
pygame.display.set_caption("Action Game Seru")
clock = pygame.time.Clock()

# Player
player = pygame.Rect(50, HEIGHT//2 - 25, 50, 50)
player_speed = 5

# Enemy
enemy_size = 50
enemy_speed = 4
enemies = []

def spawn_enemy():
    y = random.randint(0, HEIGHT - enemy_size)
    rect = pygame.Rect(WIDTH, y, enemy_size, enemy_size)
    enemies.append(rect)

# Score
score = 0
font = pygame.font.SysFont(None, 36)

# Game loop
running = True
spawn_timer = 0
while running:
    clock.tick(60)
    screen.fill((30, 30, 30))

    # Event
    for event in pygame.event.get():
        if event.type == pygame.QUIT:
            running = False

    # Player movement
    keys = pygame.key.get_pressed()
    if keys[pygame.K_UP] and player.top > 0:
        player.y -= player_speed
    if keys[pygame.K_DOWN] and player.bottom < HEIGHT:
        player.y += player_speed

    # Enemy spawn
    spawn_timer += 1
    if spawn_timer > 40:
        spawn_enemy()
        spawn_timer = 0

    # Move enemies
    for enemy in enemies[:]:
        enemy.x -= enemy_speed
        if enemy.right < 0:
            enemies.remove(enemy)
            score += 1
        if player.colliderect(enemy):
            running = False

    # Draw
    pygame.draw.rect(screen, (0, 200, 0), player)
    for enemy in enemies:
        pygame.draw.rect(screen, (200, 0, 0), enemy)

    # Score
    score_text = font.render(f"Score: {score}", True, (255,255,255))
    screen.blit(score_text, (10, 10))

    pygame.display.flip()

# Game Over
screen.fill((0,0,0))
over_text = font.render("Game Over!", True, (255,0,0))
screen.blit(over_text, (WIDTH//2 - 80, HEIGHT//2 - 20))
pygame.display.flip()
pygame.time.wait(2000)
pygame.quit()